#  Obituary Management Platform 🕊️ 

##  Project Overview  
This is a **PHP-based web application** that allows users to submit, store, and view obituaries.  
It includes **SEO & social media sharing optimizations** to ensure obituaries are discoverable on search engines and shareable on social platforms.  

---

##  Features  
 **Obituary Submission** – Users can submit obituaries via a form.  
 **Database Integration** – Stores obituaries in a MySQL database.  
 **Obituary Display** – View all submitted obituaries in a structured format.  
 **SEO Optimization** – Uses meta tags, Open Graph, and sitemaps for better search visibility.  
 **Social Media Sharing** – Open Graph (Facebook, LinkedIn) & Twitter Card integration.  
 **Error Handling** – Handles form validation and database errors.  
 **Cross-Browser Compatibility** – Works on Chrome, Brave, Firefox, and Edge.  

---

##  Technologies Used  
- **Frontend:** HTML, CSS  
- **Backend:** PHP, MySQL  
- **SEO Enhancements:** Meta tags, Open Graph, Twitter Cards, Sitemap   

---

##  Project Structure  
```bash
obituary-management-platform/
│── htdocs/
│   │── obituary_app/
│   │   │── index.php           # Home page
│   │   │── obituary_form.html  # Obituary submission form
│   │   │── submit_obituary.php # Handles form submission
│   │   │── view_obituaries.php # Displays obituaries
│   │   │── sitemap.php         # Dynamic XML Sitemap
│   │   │── robots.txt          # SEO rules for crawlers
│   │   │── .htaccess           # URL rewriting & security
│   │── assets/
│   │   │── css/style.css       # Custom styling
│   │   │── images/             # Static assets
```
---

##  Setup Instructions  
Follow these steps to run the project on your local machine.  

### 1. Install Dependencies  
- Install XAMPP (for PHP & MySQL).  
- Start Apache and MySQL in XAMPP Control Panel.  

### 2. Clone Repository & Setup Database  
```sh
git clone https://github.com/YOUR_USERNAME/obituary-management-platform.git
```
- Move the obituary_app folder inside htdocs.
- Open phpMyAdmin and create a database named obituary_platform.
- Import the database structure from database.sql

---

## Run Locally
Open a browser and visit:
```arduino
http://localhost/obituary_app/
```
Submit an obituary and verify that it gets stored in the database.

---

## License
**MIT License**.
