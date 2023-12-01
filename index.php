<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://unpkg.com/axios@1.1.2/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="js/script.js" type="module"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>PHP ToDo List JSON</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body class=" bg-secondary">
    <div id="app">
        <section class="todo-list py-3">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1 class="display-1 text-light">Todo List</h1>
                        <ul class="list-group list-group-flush border border-1 rounded">
                            <li v-for="(task, index) in todolist" :key="index"
                                class="list-group-item cp d-flex justify-content-between">
                                <span :class="{'text-decoration-line-through' : task.done}"
                                    @click="markAsDone(index)">{{task.name}}</span>
                                <span @click="deleteRow(index)">X</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="add-todo">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="input-group mb-3">
                            <input v-model="newTask" type="text" class="form-control"
                                placeholder="Inserisci elemento..." aria-label="Inserisci nuovo elemento per la lista"
                                aria-describedby="button-add">
                            <button class="btn btn-outline-warning" type="button" id="button-add"
                                @click="addTask">Inserisci</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

</html>