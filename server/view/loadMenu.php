<?php

$qGetMenu = '
    SELECT * FROM menu_app
    WHERE menu_install = 1 and menu_parent=0
    ';
if ($result = $conn->query($qGetMenu)) {
    if ($result->num_rows > 0) {
        $activeMenu = 0; //load first active menu
        $menuPage = '';
        $arrowParent = '<i class="fa fa-angle-left pull-right">';
        while ($rowParent = $result->fetch_assoc()) {
            //get all child from this parent
            $qGetMenuChild = '
                    SELECT * FROM menu_app
                    WHERE menu_install=1 and menu_child=0 and menu_parent=' . $rowParent['menu_id'] . '
                    ORDER BY menu_name ASC
                    ';
            $resultGetMenuChild = $conn->query($qGetMenuChild);

            if ($activeMenu <= 0) {
                $class = 'class="active"';
            } else if ($resultGetMenuChild->num_rows > 0) {
                $class = 'class="tree-view"';
            } else {
                $class = '';
            }
            $activeMenu++;
            $menuPage.='<li ' . $class . '>';
            if ($resultGetMenuChild->num_rows > 0) {
                $menuPage.='<a href="#">';
            } else {
                $menuPage.='<a href="'.$rowParent['menu_url'].'">';
            }
            $menuPage.='<i class="' . $rowParent['menu_icon'] . '"></i> <span>' . $rowParent['menu_name'] . '</span>';

            if ($resultGetMenuChild->num_rows > 0) {
                $menuPage.='<i class="fa fa-angle-left pull-right"></i></a>';
                $menuPage.='<ul class="treeview-menu">';
                while ($rowChild = $resultGetMenuChild->fetch_assoc()) {
                    $menuPage.='<li><a href="#">' . $rowChild['menu_name'] . '</a></li>';
                }
                $menuPage.='</ul>';
            } else {
                $menuPage.='</a></li>';
            }
        }
    } else {
        echo "No record found : 0 results";
    }
} else {
    printf("Error: %s\n", $conn->error);
}
