
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;700;800&family=Open+Sans&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/d7b7127037.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

</head>
<body>
    <?php $__env->startSection('content'); ?>
    <section>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
                <h5 id="offcanvasRightLabel">Notifications</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                ...
            </div>
        </div>
        <div class="section col-lg-9 col-md-10">
            <div class="container-1">
                <h3> <i class="fas fa-tasks me-2"></i>Todo List
                    <button class="btn btn-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                        aria-controls="offcanvasRight"> <i class="fa-solid fa-bell"></i> 123</button>
                </h3>
            </div>
            <div class="container-2 table-responsive-sm"></div>
            <table class="my-3 table-sm" id="todoTable">
                <thead>
                    <tr style="border-bottom: 1px solid rgb(214, 206, 206);">
                        <th>Task Type</th>
                        <th>Task</th>
                        <th>Priority</th>
                        <th>Actions</th>
                        <th>Due Date</th>
                    </tr>
                </thead>
    
                <tbody>
                </tbody>
            </table>
    
            <br>
            <div class="col-sm-5 text-center" style="padding: 10px;">
                <h4 class="text-center">Add Task</h4>
                <form action="" id="addTask">
                    <label for="members" style="display: block;">Task Type:</label>
                    <select name="members" id="members" required>
                        <option value="Photography">Photography</option>
                        <option value="Videophragy">Videophragy</option>
                        <option value="Drone Shot">Drone Shot</option>
                        <option value="Album">Album</option>
                    </select>
                    <label for="priority" style="display: block;">Task Priority</label>
                    <select name="priority" id="priority" required>
                        <option value="low">low</option>
                        <option value="middle">middle</option>
                        <option value="high">high</option>
                    </select>
                    <label for="completion-date" style="display: block;">Date</label>
                    <input type="date" name="completionDate" id="completionDate" required>
                    <label for="taskDescription" style="display: block;">Task Details</label>
                    <textarea name="taskDescription" id="" cols="30" rows="5" required></textarea>
                </form>
                <br>
                <button class="btn btn-danger" onclick="resetList()">Cancel</button>
                <button class="btn btn-success" onclick="addItem();">Add Task</button>
            </div>
        </div>
    </section>
   <?php $__env->stopSection(); ?>
    <script>
        function resetList() {
            document.getElementById('addTask').reset();
        }

        function print() {
            console.log("hello");
        }

        function addItem() {
            var formData = document.getElementById('addTask')

            var todoData = document.getElementById('todoTable');
            // insert a row at the start of todolist
            let newRow = todoData.insertRow(1);
            var els = document.getElementsByTagName('tr');
            for (var i = 0; i < els.length; i++) {
                els[i].style.borderBottom = "1px solid rgb(214, 206, 206)";
            }

            // Insert a cell in the row at index 0
            let newCell1 = newRow.insertCell(0);
            let newCell2 = newRow.insertCell(1);
            let newCell3 = newRow.insertCell(2);
            let newCell4 = newRow.insertCell(3);
            let newCell5 = newRow.insertCell(4);

            // Append a text node to the cell
            let memeberName = document.createTextNode(formData.members.value);
            let taskD = document.createTextNode(formData.taskDescription.value);
            taskD.id = "NotComplete";

            let priorityLevel = document.createElement('h6');
            var priorityIcon = document.createElement('span');

            switch (formData.priority.value) {
                case 'high':
                    priorityIcon.className = "badge bg-danger";
                    priorityIcon.textContent = "High";
                    break;
                case 'middle':
                    priorityIcon.className = "badge bg-warning";
                    priorityIcon.textContent = "Middle";
                    break;
                case 'low':
                    priorityIcon.className = "badge bg-success";
                    priorityIcon.textContent = "Low";
                    break;
                default:
                    break;
            }
            priorityLevel.appendChild(priorityIcon);

            let action = document.createElement('a');
            action.setAttribute('href', "#");
            var tick = document.createElement('i');
            tick.className = "fas fa-check text-success me-3"; // tick
            tick.setAttribute("onclick", "completeTask(this)");
            action.appendChild(tick);
            var trash = document.createElement('i');
            trash.className = "fas fa-trash-alt text-danger";
            trash.setAttribute("onclick", "removeItem(this)");
            action.appendChild(trash);

            let dateCompletion = document.createElement('input')
            dateCompletion.id = "completion";
            dateCompletion.setAttribute("type", "date");
            dateCompletion.setAttribute("value", formData.completionDate.value);

            newCell1.appendChild(memeberName);
            newCell2.appendChild(taskD);
            newCell3.appendChild(priorityLevel);
            newCell4.appendChild(action);
            newCell5.appendChild(dateCompletion);

            document.getElementById('addTask').reset();

        }

        function removeItem(el) {
            // while there are parents, keep going until reach TR 
            while (el.parentNode && el.tagName.toLowerCase() != 'tr') {
                el = el.parentNode;
            }
            // If el has a parentNode it must be a TR, so delete it
            el.parentNode.removeChild(el);
        }

        function completeTask(el) {
            console.log("complete task");
            while (el.parentNode && el.tagName.toLowerCase() != 'tr') {
                el = el.parentNode
                
            }
           el.style.textDecoration = "line-through";
        }

        var textWrapper = document.querySelector('.ml6 .letters');
        textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

        anime.timeline({
                loop: true
            })
            .add({
                targets: '.ml6 .letter',
                translateY: ["1.1em", 0],
                translateZ: 0,
                duration: 750,
                delay: (el, i) => 50 * i
            }).add({
                targets: '.ml6',
                opacity: 0,
                duration: 1000,
                easing: "easeOutExpo",
                delay: 1000
            });
    </script>
</body>
</html>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\faaiz\athree\resources\views/client.blade.php ENDPATH**/ ?>