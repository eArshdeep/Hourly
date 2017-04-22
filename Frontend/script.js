function getValue(){
  // clear all child elements in form
  clearAllChildElements("form");

  // find out how many inputs have to be displayed and sent it to appropriate function
  var amount = handle("dropdown").value;
  if (amount != 0){
    output(amount);
  }
  
}

function output(amount){
  // run as many times as forms need to be output
  for(i = 0; i < amount; i++){

    // create div element with proper css class
    var div = document.createElement("div");
    div.className = "block";

    // (1) append first paragraph ("Employer Name") to div 
    var employer_paragraph = createParagraphElement("Employer Name");
    div.appendChild(employer_paragraph);

    // (2) than add the corresponding input field
    var employer_input = createInputField("e.g. Comcast", "name[]");
    div.appendChild(employer_input);

    // (1) append second paragraph ("Pay") to div 
    var pay_paragraph = createParagraphElement("Pay");
    div.appendChild(pay_paragraph);
    
    // (2) than add the corresponding input field
    var wage_input = createInputField("e.g. 25", "wage[]");
    div.appendChild(wage_input);

    // (1) append second paragraph ("Daily Hours") to div 
    var hour_paragraph = createParagraphElement("Daily Hours");
    div.appendChild(hour_paragraph);

    // (2) than add the corresponding input field
    var hour_input = createInputField("e.g. 8 (only for hourly)", "hours[]");
    div.appendChild(hour_input);

    /*// add radio buttons 
      // create radios
    var salary_radio = createRadio("salary");
    var wage_radio = createRadio("wage");
      // create and style paragraph
    var salary_radio_paragraph = createParagraphElement("Salary");
    salary_radio_paragraph.style.display = "inline";
      // create and style paragraph
    var wage_radio_paragraph = createParagraphElement("Wage");
    wage_radio_paragraph.style.display = "inline";
      // append radios
    div.appendChild(document.createElement("br"));
    div.appendChild(wage_radio_paragraph);
    div.appendChild(wage_radio);
      // append radios
    div.appendChild(document.createElement("br"));
    div.appendChild(salary_radio_paragraph);
    div.appendChild(salary_radio);*/
    

    // append div to form
    document.getElementById("form").appendChild(div);

  }

    // at the very end, add a submit button to form
    var submit = createSubmitButton();
    document.getElementById("form").appendChild(submit);

}


// FUNCTIONS * FUNCTIONS * FUNCTIONS * FUNCTIONS * FUNCTIONS * FUNCTIONS \\

// Take a parameter of id and clear all of its child nodes and elements
function clearAllChildElements(id){
  var parent = document.getElementById(id);
  while (parent.hasChildNodes()) {
    parent.removeChild(parent.lastChild);
  }
}

// Take a parameter of id and get a dom handle on a element with that id and return it
function handle(id){
  var handle = document.getElementById(id);
  return handle;
}

function createParagraphElement(text){
  var element = document.createElement("p");
  var node = document.createTextNode(text);
  element.appendChild(node);
  return element;
}

function createInputField(placeholder, name){
  var input = document.createElement("input");
  input.type = "text";
  input.className = "input_text";

  input.placeholder = placeholder;
  input.name = name;

  return input;
}

function createSubmitButton(){
  var button = document.createElement("input");
  button.type = "submit";
  button.className = "input_submit";
  return button;
}

/*function createRadio(value){
  var radio = document.createElement("input");
  radio.type = "radio";
  radio.value = value;
  radio.name = "type[]";
  radio.className = "input_radio";
  return radio;
}*/
