# MySQL-Password
Webes megoldások
<br>
**Demo:**
<br>
https://toxy.hu/webesmegoldasok/login/
<br>
Teszt: katika@gmail.com -- katica85
```
CREATE TABLE users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    color VARCHAR(255) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);
```
