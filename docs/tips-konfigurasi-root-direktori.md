# Tips: Konfigurasi Web Server Untuk Root Direktori Yang Beda
Ini adalah tips untuk mengubah konfigurasi webserver yang dimana biasanya default root direktori nya yang berada di folder `htdocs`, dan tips ini untuk merubah root direktori web server kamu sesuai dengan keinginan kamu.  
- Masuk kedalam folder ini `C:\xampp\apache\conf\httpd.conf`
- Lalu buka file `httpd.conf`
- Lalu cari tag : `DocumentRoot "C:/xampp/htdocs"`
- Lalu Ubah tag Menjadi sumber direktori kamu contohnya seperti : `DocumentRoot "C:/xampp/htdocs/myproject/web"`
- Sekarang cari tag and ubah itu menjadi `<Directory "C:/xampp/htdocs/myproject/web">`
- Lalu Restart Apache Kamu

Referensi: https://stackoverflow.com/questions/18902887/how-to-configuring-a-xampp-web-server-for-different-root-directory