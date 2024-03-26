<?php
// Меню ресторана
$menu = [
    1 => ['name' => 'Пицца', 'price' => 10.99],
    2 => ['name' => 'Паста', 'price' => 8.49],
    3 => ['name' => 'Стейк', 'price' => 15.99],
    4 => ['name' => 'Салат', 'price' => 5.99],
    5 => ['name' => 'Десерт', 'price' => 4.99]
];

$totalCost = 0;

echo "Добро пожаловать в ресторан!\n";

while (true) {
    echo "----------------------------------\n";
    echo "Выберите блюдо по номеру:\n";
    foreach ($menu as $key => $item) {
        echo "$key. {$item['name']} - {$item['price']} $\n";
    }
    echo "0. Завершить заказ\n";

    $choice = readline("Введите номер блюда: ");

    if (!isset($menu[$choice])) {
        echo "Пожалуйста, выберите корректный номер блюда.\n";
        continue;
    }

    if ($choice == 0) {
        break;
    }

    $selectedItem = $menu[$choice];
    $totalCost += $selectedItem['price'];
}

echo "----------------------------------\n";
echo "Итоговая стоимость заказа: $totalCost $\n";

?>
?>
