window.addEventListener('load',() =>{
const form =document.querySelector("#new-task-form");
const input=documet.querySelector("#new-task-input");
const_list_el=document.querySelector("#tasks");


form.addEventListener('submit',(e) =>{
    e.previousdefault();
const task=input.value;

if(!task){
    alert("please fill out the task");
    return ;
}
const task_el=document.createElement("div");
task_el_classList.add("task");
const task_content_el=document.createElement("div");
task_content_el.class_list.add("content");



task_el.appendChild(task_content_el);
list_el.appendChild(task_el);






})

})