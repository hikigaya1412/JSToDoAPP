var taskList = new Array();
var count = 0;
function toDoApp() {

    var task = document.getElementById("Task").value;
    if (task != "") {

        taskList[count] = task;
        count++;
        alert(task + ' has been added');
        document.getElementById("Task").value = "";
    }
    DisplayTask();
}

function DisplayTask() {
var count = 0;
    document.getElementById('toDoApp').innerHTML = "";
    if (taskList.length != 0) {
        for (j = 0; j < taskList.length; j++) {
            if(taskList[j] != ''){
                count++;
                 document.getElementById('toDoApp').innerHTML += "<hr>Task No." +count+ " : " + taskList[j]
                + "&nbsp;&nbsp;<button type='button' id='close"+ j +"' name='closeBut' value = '"+ j +"' onclick='deleteTask("+ j +")' "+
                "class='close' aria-label='Close'> <span aria-hidden='true'>&times</span> </button>";
            }
        }
    }
}

function deleteTask(index){
    taskList[index] = '';
    DisplayTask();

}





