window.onload = function() {
  var todoObject = new todoApp();
  document.getElementById("myform").onsubmit = function(e) {
    e.preventDefault();
    var caption = document.getElementById("input").value;
    todoObject.add(caption, false);
    document.getElementById("input").value = "";
  };

  function todoItem(caption, isCompleted) {
    this.caption = caption;
    this.isCompleted = isCompleted;
  }

  function todoApp() {
    this.caption;
    this.isCompleted;
    this.todoitemcollection = [];
    this.add = function(caption, isCompleted) {
      if (caption) {
        console.log(caption);
        var todo = new todoItem(caption, isCompleted);
        this.todoitemcollection.push(todo);
        this.render();
      } else {
        alert("It's empty!!!");
      }
    };

    this.removeItem = function(index) {
      delete this.todoitemcollection.splice(index, 1);
      this.render();
    };

    this.render = function() {
      var ul = document.getElementById("todoList");
      if (ul.childElementCount == 0) {
        for (i = 0; i < this.todoitemcollection.length; i++) {
          console.log(this.todoitemcollection[i], i);
          var li = document.createElement("li");
          var z = document.createElement("label");
          var text = document.createTextNode(
            this.todoitemcollection[i].caption
          );
          z.className = "labeltext";
          var checkbox = document.createElement("input");
          checkbox.type = "checkbox";
          checkbox.className = "toggle";
          checkbox.checked = this.todoitemcollection[i].isCompleted;

          console.log(checkbox.checked, "fugasoihaoshgpsjpov");
          if (checkbox.checked) {
            // console.log(e.target, "checked");
            // console.log(e.target.parentElement, "checked");
            z.style.textDecoration = "line-through";
          } else {
            z.style.textDecoration = "none";
          }
          var closebtn = document.createElement("input");
          closebtn.type = "button";
          closebtn.value = "X";
          closebtn.className = "destroy";

          li.appendChild(checkbox);
          li.appendChild(z);
          z.appendChild(text);
          li.appendChild(closebtn);
          ul.appendChild(li);

          closebtn.onclick = function(i) {
            todoObject.removeItem(i);
          }.bind(null, i);

          checkbox.onclick = function(i) {
            todoObject.todoitemcollection[i].isCompleted = !todoObject
              .todoitemcollection[i].isCompleted;
            console.log(
              todoObject.todoitemcollection[i].isCompleted,
              "cisCbabc"
            );
            todoObject.render();
          }.bind(null, i);
        }
      } else {
        ul.removeChild(ul.firstChild);
        this.render();
      }
    };
  }
};
