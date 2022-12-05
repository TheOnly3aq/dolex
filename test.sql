1
Select 

2
SELECT * FROM ‘customers ‘ 

3  
SELECT * FROM ‘employees ‘ 

4  
SELECT * FROM ‘orders’ 

5  
SELECT customerName, contactLastName, contactFirstName 
FROM customers;  

6  
SELECT lastName, firstName, email, jobTitle 

FROM employees;  

7 
SELECT orderDate, shippedDate 
FROM orders; 

8
SELECT customerName, contactLastName, contactFirstName 
FROM customers 
ORDER BY contactLastName ASC; 
 
9
SELECT customerName, contactLastName, contactFirstName 
FROM customers 
ORDER BY contactLastName DESC; 

10
SELECT lastName, firstName, jobTitle 
FROM employees
ORDER BY firstName DESC;

11
SELECT orderDate, shippedDate
FROM orders
ORDER BY orderDate ASC;

12
SELECT orderDate, shippedDate
FROM orders
ORDER BY orderDate DESC;

13
SELECT *
FROM customers
WHERE city = "NANTES";

14
SELECT *
FROM orders
WHERE status = "In Process";

15
SELECT *
FROM employees
WHERE firstName = "Leslie";

16
SELECT *
FROM products
WHERE buyPrice
BETWEEN 50.51 AND 100.51;

17
SELECT *
FROM orders
WHERE orderDate
BETWEEN '2003-01-01' AND '2004-01-01';

18
SELECT *
FROM payments
WHERE paymentDate BETWEEN '2003-01-01' AND '2004-01-01';

19
SELECT *
FROM products
WHERE buyPrice BETWEEN 50.51 AND 100.51
LIMIT 5;

20
SELECT *
FROM orders
WHERE orderDate BETWEEN '2003-01-01' AND '2004-01-01';
LIMIT 3;

21
SELECT *
FROM payments
WHERE paymentDate BETWEEN '2003-01-01' AND '2004-01-01';
LIMIT 10;

22
SELECT DISTINCT status
FROM orders;

23
SELECT DISTINCT country
FROM customers;

24
SELECT *
FROM customers
WHERE customerName LIKE "Co%";

25
SELECT *
FROM customers
WHERE customerName LIKE "B%"; 

26
SELECT *
FROM customers
WHERE customerName LIKE "%en"; 
 

 