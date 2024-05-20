
<?php
    session_start();

    header('Content-Type: application/json');
    
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }
    
    $data = json_decode(file_get_contents('php://input'), true);
    
    if ($data) {
        $item = array(
            'name' => $data['name'],
            'image' => $data['image'],
            'price' => $data['price'],
            'distanceMi' => $data['distanceMi'],
            'distanceKm' => $data['distanceKm']
        );
        $_SESSION['cart'][] = $item;
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false]);
    }
?>