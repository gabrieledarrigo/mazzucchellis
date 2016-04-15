import gulp from 'gulp';
import ftp from 'vynil-ftp';
import gutil from 'gutil';

gulp.task('deploy', () => {
    let remotePath = '/public_html/test_deploy';
    let connection = ftp.create({
        host: process.env.FTP_HOST,
        user: process.env.FTP_USER,
        password: process.env.FTP_PASSWORD,
        log: gutil.log
    });

    gulp.src([
            'wordpress/**',
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



