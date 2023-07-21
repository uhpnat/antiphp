<?php
include 'views/include/header.php';
?>
<?php
if (!isset($_GET['page'])) {
    include 'views/include/home.php';
} else {
    $page = $_GET['page'];
    switch ($page) {
        case 'home':
            include 'views/include/home.php';
            break;
        case 'shop-grid':
            include 'views/include/shop-grid.php';
            break;
        case 'blog-list':
            include 'views/include/blog-list.php';
            break;
        case 'contact':
            include 'views/include/contact.php';
            break;
        case 'register':
            include 'views/include/register.php';
            break;
        case 'login':
            include 'views/include/login.php';
            break;
        case 'shop-compare':
            include 'views/include/shop-compare.php';
            break;
        case 'shop-checkout':
            include 'views/include/shop-checkout.php';
            break;
        case 'page-account':
            include 'views/include/page-account.php';
            break;
        case 'shop-vendor-list':
            include 'views/include/shop-vendor-list.php';
            break;
        case 'page-about-us':
            include 'views/include/page-about-us.php';
            break;
        case 'shop-cart':
            include 'views/include/shop-cart.php';
            break;

        case 'test':
            include 'views/include/test.php';
            break;
        case 'shop-single-product':

            $id = $_GET['productId'];
            echo $id;
            include 'views/include/shop-single-product.php';
            break;

        default:
            include 'views/include/404.php';
            break;
    }
}
?>
<?php
include 'views/include/footer.php';
?>

<!-- <script>
    function loadPage(page, event) {

        event.preventDefault(); // Ngăn chặn hành vi mặc định của thẻ <a>

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("content").innerHTML = this.responseText;
                history.pushState({
                    page: page
                }, '', '?page=' + page);
            }
        };
        xhttp.open("GET", 'views/include/' + page + '.php', true);
        xhttp.send();
        var pageParameter = '<?php echo isset($_GET['page']) ? $_GET['page'] : ''; ?>';

    }
</script> -->