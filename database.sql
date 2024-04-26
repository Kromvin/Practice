
CREATE Table products {
  product_id int
  name varchar
  price decimal
  description varchar
} 

CREATE  Table users {
  id integer [primary key]
  first_name varchar
  last_name varchar
  password varchar
  email varchar
  phone varchar
}

CREATE Table couriers {
  id integer
  username varchar
  password varchar
  phone int
}
CREATE Table clients {
  id integer
  address varchar
  user_id int
}
CREATE Table address {
  address_id int [primary key]
  user_id int 
  street_id int

}
CREATE Table manager{
  manager_id int
  username_id int
  password_hash varchar
  phone int

}
CREATE Table order{
  order_id int [primary key]
  client_id int
  courier_id int
  manager_id int

}
CREATE Table cart{
  cart_id int [primary key]
  price decimal
}
CREATE Table manager_permissions{
  manager_id int
  permission_type varchar
}

CREATE Table street{
  street_id int [primary key]
  street_name varchar
}
CREATE Table paymentstatus{
  payment_id int [primary key]
  payment_status varchar
}
Ref: "products"."product_id" < "order"."order_id"

Ref: "order"."client_id" < "clients"."id"

Ref: "couriers"."id" < "order"."courier_id"

Ref: "manager"."manager_id" < "order"."manager_id"

Ref: "users"."id" < "couriers"."id"

Ref: "users"."id" < "manager"."manager_id"

Ref: "users"."id" < "clients"."id"



Ref: "cart"."cart_id" < "clients"."id"

Ref: "cart"."cart_id" < "order"."order_id"

Ref: "street"."street_id" < "address"."street_id"

Ref: "manager_permissions"."manager_id" < "manager"."manager_id"



Ref: "paymentstatus"."payment_id" < "cart"."price"

CREATE TRIGGER grant_manager_permissions
AFTER INSERT ON order
FOR EACH ROW
BEGIN
    DECLARE manager_id INT;
    
    SELECT manager_id INTO manager_id FROM `order` WHERE order_id = NEW.order_id;
    
    INSERT INTO manager_permissions (manager_id, permission_type)
    VALUES (manager_id, 'add_to_order');
    INSERT INTO manager_permissions (manager_id, permission_type)
    VALUES (manager_id, 'remove_from_order');
END;

CREATE TRIGGER create_order_and_payment
AFTER INSERT ON `order`
FOR EACH ROW
BEGIN
    DECLARE total_price DECIMAL(10, 2);
    DECLARE client_balance DECIMAL(10, 2);
    
    -- Получаем общую стоимость заказа
    SELECT SUM(price) INTO total_price
    FROM cart
    WHERE cart_id = NEW.cart_id;
    
    -- Получаем баланс клиента
    SELECT balance INTO client_balance
    FROM clients
    WHERE id = NEW.client_id;
    
    -- Проверяем, достаточно ли средств у клиента для оплаты заказа
    IF client_balance >= total_price THEN
        -- Вычитаем стоимость заказа из баланса клиента
        UPDATE clients
        SET balance = balance - total_price
        WHERE id = NEW.client_id;
        
        -- Помечаем заказ как оплаченный
        UPDATE `order`
        SET paid = 1
        WHERE order_id = NEW.order_id;
        
        -- Добавляем информацию об оплате в таблицу payments (если необходимо)
        INSERT INTO payments (order_id, amount, payment_date)
        VALUES (NEW.order_id, total_price, NOW());
        
        
    ELSE
        -- Обработка случая, когда у клиента недостаточно средств для оплаты заказа
        -- Можно выбрасывать ошибку, отправлять уведомление и т.д.
    END IF;
END;