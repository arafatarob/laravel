# POS & Inventory Management System

A complete pixel-perfect modern POS & Inventory Admin Dashboard built with **PHP 8 + MySQL + Bootstrap 5 + Vanilla JS**.

## Installation

1. Copy the project folder to your web server (e.g., `htdocs/pos` for XAMPP).
2. Create a MySQL database and import `database/pos_db.sql` (creates DB `pos_db`).
3. Edit `includes/config.php` and update DB credentials and `BASE_URL` if needed.
4. Make sure `uploads/` is writable.
5. Visit `http://localhost/pos/` in your browser.

## Default Login

- **Email:** `admin@pos.com`
- **Password:** `admin123`

Other accounts: `jahid@pos.com` (manager), `maria@pos.com` (staff) — same password.

## Features

- Dashboard with sales/purchase/profit/due cards, line & doughnut charts, recent transactions
- Products: Add/Edit/Delete, SKU, barcode, category, brand, stock, status
- Sales (POS): Product grid, cart, discount/tax/shipping, multiple payment methods, AJAX search, invoice generation
- Purchases: Vendor selection, multi-item entry, stock auto-update
- Customers, Vendors: Full CRUD with sales/purchase totals
- Returns: Sales & purchase returns with reason and status
- Expenses: Categorized expense tracking
- Reports: Date range filters, sales trend chart, top products, print
- Users: Role-based (admin / manager / staff), password hashing
- Settings: Store info, currency, tax rate
- Authentication: Login, logout, forgot password, reset password
- Security: CSRF tokens, prepared statements, password hashing, session protection
- UI: Dark navy sidebar, purple gradient active state, rounded cards, smooth animations, dark mode toggle, responsive

## Folder Structure

```
/assets   - css, js, images
/auth     - login, logout, forgot, reset
/database - SQL file
/includes - config, header, footer, functions
/modules  - dashboard, products, sales, purchases, customers, vendors, returns, expenses, reports, users, settings, invoice
/uploads  - file uploads
```

## Tech Stack

PHP 8+ · MySQL · Bootstrap 5.3 · Chart.js 4 · DataTables · jQuery · Bootstrap Icons · Poppins font
