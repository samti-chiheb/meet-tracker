// add new row btns
const addNewBtns = document.querySelectorAll(".add-new-btn");
const cancelBtns = document.querySelectorAll(".cancel-form-btn");
const saveBtns = document.querySelectorAll(".save-form-btn");
const formRows = document.querySelectorAll(".form-row");
const removeBtns = document.querySelectorAll('.remove-btn'); 
let deleteAction = "";

addNewBtns.forEach((addNewBtn, index) => {
  let input = formRows[index].firstElementChild.firstElementChild;
  
  addNewBtn.addEventListener("click", ()=>{
    formRows[index].classList.add('active');
    saveBtns[index].classList.add('active');
    cancelBtns[index].classList.add('active');
    addNewBtn.classList.remove('active');
    input.focus();
  })
});

cancelBtns.forEach((cancelBtn, index) => {
  
  cancelBtn.addEventListener("click", ()=> {
    formRows[index].classList.remove('active');
    cancelBtn.classList.remove('active');
    saveBtns[index].classList.remove('active');
    addNewBtns[index].classList.add('active');
  })
})

saveBtns.forEach((saveBtn, index) => {
  
  saveBtn.addEventListener("click", ()=> {
    let input = true ;
    
    if (input) {
      formRows[index].classList.remove('active');
      cancelBtns[index].classList.remove('active');
      saveBtn.classList.remove('active');
      addNewBtns[index].classList.add('active');
    }else{
      console.log("required form");
    }
  })
})

// update scripte
const updateBtn = document.querySelectorAll(".update-btn");
const cancelUpdateBtn = document.querySelectorAll(".cancel-update-btn");
const tRows = document.querySelectorAll('tbody tr');

function insertAfter(newNode, existingNode) {
  existingNode.parentNode.insertBefore(newNode, existingNode.nextSibling);
}


tRows.forEach(tRow => {
  tRow.addEventListener("dblclick", ()=> {
    //get cells data
    const theads = document.querySelectorAll(".table-header th");
    var tData = tRow.children;
    var cells = [];
    tDataLength = Object.keys(tData).length
    for (let i = 0; i < tDataLength; i++) {
      cells.push(tData[i].innerText);
    }

    // replace td by input and add buttons container
    if(!tRow.classList.contains('form-btns') 
      && !tRow.classList.contains('form-row')     
      && !tRow.classList.contains('update-row')
      && !tRow.parentElement.parentElement.parentElement.parentElement.classList.contains('updating')
      && !tRow.parentElement.classList.contains('selection')
      ){

      // set expectation classes
      tRow.classList.add('update-row')
      tRow.classList.remove('active')
      tRow.parentElement.parentElement.parentElement.parentElement.classList.add('updating')
      
      


      // add input field 
      for (let i = 0; i < cells.length; i++) {
        const thead = theads[i];
        const cell = cells[i];
        var formId = tRow.previousElementSibling.className;
        var th = thead.innerHTML.toLowerCase().replace(" ","-")
        tData[i].innerHTML = `<td>
                                <input type="text" name="${th}" form="updateRecruiter${formId}" placeholder="${cell}" value="${cell}">
                              </td>`;        
      }

      const input = document.querySelectorAll(".update-row input")
      input[0].select()

      // add update buttons container
      const updateActionRow = document.createElement('tr');
      updateActionRow.classList.add('update-action');
      updateActionRow.innerHTML =`<td colspan=${cells.length+1}>
                                    <button form="updateRecruiter${formId}" type="submit"  class="action-btn update-btn">
                                      <i class="bx bx-message-edit" ></i>
                                      Update
                                    </button>
                                    <button type="button" class="action-btn cancel-update-btn">
                                      <i class="bx bx-message-square-x" ></i>
                                      Cancel
                                    </button>
                                  </td>`;
      

      insertAfter(updateActionRow, tRow);

    // buttons actions
      const updateBtn = document.querySelector(".update-btn");
      const cancelUpdateBtn = document.querySelector(".cancel-update-btn");

      // cancel btn
      cancelUpdateBtn.addEventListener("click", ()=> {
        tRow.innerHTML = '';
        cells.forEach(cell => {
          let creatTd = document.createElement("td") ;
          creatTd.appendChild(document.createTextNode(cell))
          tRow.appendChild(creatTd)
        });

        // remove buttons container and update-row class
        updateActionRow.remove();
        tRow.classList.remove('update-row')
        tRow.parentElement.parentElement.parentElement.parentElement.classList.remove('updating')

        // todo add href to last cell 
      });

      //update btn
      updateBtn.addEventListener("click", ()=>{
        const updateForm = document.querySelector('#updateRecruiter');
        console.log(updateForm);


        // //1 get input values and replace cells with thoese values
        // const inputs = document.querySelectorAll('.update-row input')
        // var newCells = []

        // inputs.forEach(input => {
        //   let newValue;
        //   if(!input.value) {
        //     newValue = input.defaultValue
        //   }else{
        //     newValue = input.value
        //   }

        //   newCells.push(newValue)
        // });
        
        // tRow.innerHTML = '';
        // newCells.forEach(cell => {
        //   let creatTd = document.createElement("td") ;
        //   creatTd.appendChild(document.createTextNode(cell))
        //   tRow.appendChild(creatTd)
        // });

        // tData[tData.length-1].innerHTML=`<a href="#">${tData[tData.length-1].innerText}</a>`; 

        // // remove buttons container and update-row class
        // updateActionRow.remove();
        // tRow.classList.remove('update-row')
        // tRow.parentElement.parentElement.parentElement.parentElement.classList.remove('updating')

        // //to do:  1- add href to last element
        // //to do:  2- add form
        // //to do:  3- add form verification
        // //to do:  4- add form error messages
      })
    }
  }) 
});
var idSelectionArray = [];
// Select a row and show delete and archive buttons
tRows.forEach((tRow)=> {
  
  tRow.addEventListener('click', ()=> {
    let parentClass = tRow.parentElement.parentElement.className
    let removeBtn = document.querySelector('.'+parentClass+'.remove-btn')

    if(!tRow.classList.contains('form-btns') 
    && !tRow.classList.contains('form-row')
    && !tRow.classList.contains('update-row')
    && !tRow.classList.contains('update-action')
    && !tRow.parentElement.parentElement.parentElement.parentElement.classList.contains('updating')
    ){
      tRow.parentElement.classList.add('selection')
      tRow.classList.toggle('active');
      var formId = tRow.previousElementSibling.className;
      //remove-buttons positions
      removeBtn.style.top = `${tRow.offsetTop}px`;
      removeBtn.classList.add('active');
      
      // add selection id list
      if(tRow.classList.contains('active')){
        idSelectionArray.push(formId) ;
      }
      if(!tRow.classList.contains('active')){
        idSelectionArray.splice(idSelectionArray.indexOf(formId), 1)
        // delete idSelectionArray [idSelectionArray.indexOf(formId)] ;
      }
      // end adding selection id list
      // transform into string
      idSelectionStr = idSelectionArray.join("-");
      console.log(idSelectionStr);

      deleteAction = "/recruiters/delete/"+idSelectionStr ;
    }

    for (let i = 0; i < tRows.length; i++) {
      const array = tRows[i];
      if (array.classList.contains('active')) {
        return i
      }
      if ( i == tRows.length-1 ){
        removeBtn.classList.remove('active');
        tRow.parentElement.classList.remove('selection')   
      }
    }
  })
})

//remove selection ( active class from tr )
tRows.forEach(tRow => {
  tRow.addEventListener('dblclick', ()=>{
    tRows.forEach(tRow => {
      tRow.classList.remove('active');   
      removeBtns.forEach(removeBtn => {
        removeBtn.classList.remove('active');  
      });
    });
    //reste selection id list
    idSelectionArray = []
    idSelectionStr = idSelectionArray.toString();
    console.log(idSelectionStr);
  })
});





// to do : 
//  1- focus on first input after showing input
//  2- if form are valide Submit ? turn red border and required message
//  3- add form dynamically to each table based on table columns
//  4- all event listener to buttons and all fomrs 
//  5- add form to each table <3
//  6- table last row design
//    6.1- remove last child border
//    6.2-
//  7- work on cancel remove buttons 