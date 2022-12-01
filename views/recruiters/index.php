<h2>recruiters list</h2>
<form method="post" action="recruiters/add" id="addRecruiter"></form>
<div class="table-container">
  <div class="recruiter remove-btn">
    <button type="button" onclick="location.href='<?= URL?>'+deleteAction" class="delete-btn">Delete</button>
    <button type="button" onclick=`location.href="<?= URL.'/delete\/'?>"`  class="archive-btn">Archive</button>
  </div>
  <table class="recruiter">
    <thead>
      <tr class="table-header">
        <th>Recruiter name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Recruiter description</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($recruiters as $recruiter): ?>
      <tr class="<?=$recruiter->id?>">
        <form  method="post" action="recruiters/update/<?=$recruiter->id?>" id="updateRecruiter<?=$recruiter->id?>"></form>
      </tr>
      <tr>
        <td> <a href= <?=URL."/recruiters/read/".$recruiter->id?>> <?=$recruiter->name ?> </a> </td>
        <td> <?=$recruiter->email ?> </td>
        <td> <?=$recruiter->phone ?> </td>
        <td> <?=$recruiter->description ?> </td>
      </tr>
      <?php endforeach; ?>
    
      <tr class="form-row">
        <td><input form="addRecruiter" type="text" name='recruiter-name' placeholder='recruiter name' required></td>
        <td><input form="addRecruiter" type="email" name='email' placeholder='email' required></td>
        <td><input form="addRecruiter" type="number" name='phone' placeholder='phone' required></td>
        <td><input form="addRecruiter" type="text" name='recruiter-descritption' placeholder='description'></td>
      </tr>
      <tr class="form-btns" >
        <td colspan="5">
          <button type="button" class="action-btn add-new-btn active">
            <i class="bx bx-message-square-add" ></i>
            add new
          </button>
          <button form="addRecruiter" type="submit"  class="action-btn save-form-btn">
            <i class="bx bx-save"></i>
            Save
          </button>
          <button type="button" class="action-btn cancel-form-btn">
            <i class="bx bx-message-square-x" ></i>
            Cancel
          </button>
        </td>
      </tr>
    </tbody>
  </table>
</div>

