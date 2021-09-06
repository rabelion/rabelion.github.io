<?php
require 'functions.php';

$id = $_GET["id"];
if( delete($id) > 0 ) {
    echo "
    <script>
        alert('Your data has been deleted');
        document.location.href = 'index.php';
    </script>    
    ";
} else {
    echo "
    <script>
        alert('Failed, unavailable to delete!');
        document.location.href = 'index.php';
    </script>
    ";
}

?>