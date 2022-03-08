<?php include "view/_partials/head.view.php";?>
        <h1>TODO app</h1>
        <a href="/add-task">Nauja</a>
        <h2>Užduočių sąrašas</h2>
        <ul>
            <?php foreach($tasks->allTasks() as $task):?>
                <li>
                <?=$task['subject'];?>
                <?=$task['priority'];?>
                <?=$task['status'];?>
                <?=$task['dueDate'];?>
                    <a href="/delete/<?=$task['id'];?>">Šalinti</a>
                    <a href="/complete/<?=$task['id'];?>">Pažymėti, kaip atliktą</a>
                </li>
            <?php endforeach;?>
        </ul>
<?php include "view/_partials/end.view.php";?>