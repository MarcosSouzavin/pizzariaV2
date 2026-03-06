estrutura 

pizzariaV2/
│
├── app/
│   ├── config/
│   │   ├── database.php
│   │   ├── env.php
│   │   └── app.php
│   │
│   ├── controllers/
│   │   ├── AuthController.php
│   │   ├── ProductController.php
│   │   ├── CartController.php
│   │   ├── OrderController.php
│   │   ├── AdminController.php
│   │   └── CategoryController.php
│   │
│   ├── models/
│   │   ├── User.php
│   │   ├── Product.php
│   │   ├── Category.php
│   │   ├── Order.php
│   │   ├── OrderItem.php
│   │   └── Address.php
│   │
│   ├── services/
│   │   ├── AuthService.php
│   │   ├── CartService.php
│   │   ├── OrderService.php
│   │   └── DeliveryFeeService.php
│   │
│   ├── helpers/
│   │   ├── auth.php
│   │   ├── csrf.php
│   │   ├── functions.php
│   │   └── response.php
│   │
│   └── middleware/
│       ├── auth.php
│       ├── admin.php
│       └── guest.php
│
├── public/
│   ├── index.php
│   ├── .htaccess
│   ├── assets/
│   │   ├── css/
│   │   │   ├── style.css
│   │   │   ├── auth.css
│   │   │   ├── menu.css
│   │   │   ├── cart.css
│   │   │   └── admin.css
│   │   │
│   │   ├── js/
│   │   │   ├── app.js
│   │   │   ├── cart.js
│   │   │   ├── checkout.js
│   │   │   ├── auth.js
│   │   │   └── admin.js
│   │   │
│   │   └── img/
│   │       ├── pizzas/
│   │       ├── logos/
│   │       └── banners/
│   │
│   └── uploads/
│
├── routes/
│   ├── web.php
│   ├── api.php
│   └── admin.php
│
├── views/
│   ├── layouts/
│   │   ├── header.php
│   │   ├── footer.php
│   │   └── admin-layout.php
│   │
│   ├── auth/
│   │   ├── login.php
│   │   ├── register.php
│   │   └── forgot-password.php
│   │
│   ├── pages/
│   │   ├── home.php
│   │   ├── menu.php
│   │   ├── cart.php
│   │   ├── checkout.php
│   │   ├── orders.php
│   │   └── profile.php
│   │
│   └── admin/
│       ├── dashboard.php
│       ├── products.php
│       ├── categories.php
│       ├── orders.php
│       └── users.php
│
├── storage/
│   ├── logs/
│   └── cache/
│
├── vendor/
│
├── .env
├── .env.example
├── composer.json
└── README.md