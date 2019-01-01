

// Execute the function and show all columns

filterSelection("all") 

// declare function
function filterSelection(evt) {
  
  var x, i;
  
  x = $(".shop-column");
  
  if (evt == "all") evt = "";


  // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
  
  for (i = 0; i < x.length; i++) 
  {
    removeClass(x[i], "show");

    if (x[i].className.indexOf(evt) > -1) addClass(x[i], "show");
  }
}


// Show filtered elements

function addClass(element, name) {

  var i, arr1, arr2;

  arr1 = element.className.split(" ");

  arr2 = name.split(" ");

  for (i = 0; i < arr2.length; i++) {

    if (arr1.indexOf(arr2[i]) == -1) {

      element.className += " " + arr2[i];
    }
  }
}


// Hide elements that are not selected

function removeClass(element, name) {

  var i, arr1, arr2;

  arr1 = element.className.split(" ");

  arr2 = name.split(" ");

  for (i = 0; i < arr2.length; i++) {

    while (arr1.indexOf(arr2[i]) > -1) {

      arr1.splice(arr1.indexOf(arr2[i]), 1); 

    }
  }

  element.className = arr1.join(" ");
}


