formValidate = Object();

formValidate.isNull = function(parameter)
{
  if(parameter==null||parameter==""||parameter==false)
  return true;
  else
  return false;
}
formValidate.checkboxChecked = false;
formValidate.radioChecked = false;
formValidate.validateField = function(formName)
{
    var type = null;
    var value = null;
    var element = null;
    var isErrorFound = false;
    for (var i = 0; i < document.forms[formName].length; i++)
    {
      type = document.forms[formName][i].type;
      value = document.forms[formName][i].value;
      element = document.forms[formName][i];
      switch(type)
      {
        case 'password':
        if(formValidate.isNull(value))
          {
            formValidate.appendText(element,"*","red");
            isErrorFound = true;
          }
        else
          {
            formValidate.appendText(element,"*","lightgreen");
          }
        break;

        case 'text':
        if(formValidate.isNull(value))
          {
            formValidate.appendText(element,"*","red");
            isErrorFound = true;
          }
        else
          {
            formValidate.appendText(element,"*","lightgreen");
          }
        break;

        case 'number':
        if(formValidate.isNull(value))
          {
            formValidate.appendText(element,"*","red");
            isErrorFound = true;
          }
        else
          {
            formValidate.appendText(element,"*","lightgreen");
          }
        break;

        case 'checkbox':
        if(element.checked == true || formValidate.checkboxChecked)
          {
            formValidate.checkboxChecked = true;
            formValidate.appendText(element,"*","lightgreen");
          }
        else
          {
            formValidate.appendText(element,"*","red");
          }
        break;

        case 'radio':
        if(element.checked == true || formValidate.radioChecked)
          {
            formValidate.radioChecked = true;
            formValidate.appendText(element,"*","lightgreen");
          }
        else
          {
            formValidate.appendText(element,"*","red");
          }
        break;

        case 'email':
        if(formValidate.isNull(value))
          {
            formValidate.appendText(element,"*","red");
            isErrorFound = true;
          }
        else
          {
            formValidate.appendText(element,"*","lightgreen");
          }
        break;

        case 'date':
        if(formValidate.isNull(value))
          {
            formValidate.appendText(element,"*","red");
            isErrorFound = true;
          }
        else
          {
            formValidate.appendText(element,"*","lightgreen");
          }
        break;

        case 'submit':
        break;

        default:
        window.alert("data is not in right format... terminated page....");
        return;
        break;

      }
    }

    if(isErrorFound)
      return false;
    else
      return true;

}

formValidate.appendText = function(element,text,color)//to add text after an element and color it
{
var node = document.createElement("span");
var textnode = document.createTextNode(text);
node.appendChild(textnode);
node.style.color = color;
  if(element.nextSibling.nodeName != 'SPAN')
  element.parentNode.insertBefore(node,element.nextSibling);//for using the 'next sibling it indicates the afterword'
  else if(element.nextSibling.nodeName == 'SPAN')
    {
      element.parentNode.removeChild(element.nextSibling);
      element.parentNode.insertBefore(node,element.nextSibling);//for using the 'next sibling it indicates the afterword'
    }
}
