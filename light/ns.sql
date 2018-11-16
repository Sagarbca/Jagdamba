SELECT `purchase_id`, `date`, `client_id`, `total_amount`, `discount`, `net_amount`, `payble`, `dues`, `payment_method`, `deposite_account` FROM `purchase_table` WHERE 1


SELECT `product_id`, `purchase_id`, `client_id`, `product_name`, `hsn_code`, `quantity`, `per`, `rate`, `amount`, `gst`, `cgst`, `cgst_amount`, `sgst`, `sgst_amount`, `igst`, `igst_amount`, `total_amount` FROM `product_master` WHERE 1

SELECT `client_id`, `client_name`, `date`, `mobile_no`, `gst_no`, `address` FROM `clients` WHERE 1




SELECT p.*,
       c.*, 
       
  FROM purchase_table p
  JOIN clients c ON c.client_id = p.client_id WHERE purchase_id = 1;



pm.* 
  JOIN product_master pm ON pm.client_id = p.client_id WHERE purchase_id = 1;