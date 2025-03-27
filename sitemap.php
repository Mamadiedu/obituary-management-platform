<?php
// Set the correct content type for XML
header("Content-Type: application/xml; charset=utf-8");

// Output the XML declaration properly
echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>http://localhost/obituary_app/view_obituaries.php</loc>
        <lastmod><?php echo date('Y-m-d'); ?></lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
</urlset>
