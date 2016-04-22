var gulp = require('gulp');
var ftp  = require('vinyl-ftp');
var gutil = require('gulp-util');

gulp.task('deploy', () => {
    var remotePath = '/public_html/wordpress/wp-content/themes/mazzucchellis';
    var connection = ftp.create({
        host: process.env.FTP_HOST,
        user: process.env.FTP_USER,
        password: process.env.FTP_PASSWORD,
        log: gutil.log
    });

    gulp.src([
            'wordpress//wp-content/themes/mazzucchellis/**',
            '!*.log',
            '!.htaccess',
            '!.idea',
            '!.DS_Store',
            '!sitemap.xml',
            '!sitemap.xml.gz',
            '!wordpress/wp-config.php',
            '!wordpress/wp-content/advanced-cache.php',
            '!wordpress/wp-content/wp-cache-config.php',
            '!wordpress/wp-content/plugins/hello.php',
            '!wordpress/wp-content/backup-db/**',
            '!wordpress/wp-content/backups/**',
            '!wordpress/wp-content/blogs.dir/**',
            '!wordpress/wp-content/cache/**',
            '!wordpress/wp-content/upgrade/**',
            '!wordpress/wp-content/uploads/**'
        ], {
            base: '.'
        })
        .pipe(connection.newer(remotePath))
        .pipe(connection.dest(remotePath));
});



