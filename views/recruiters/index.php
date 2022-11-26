<h2>recruiters list</h2>
<?php var_dump($_POST) ?>

<form method="post" id="addRecruiter">

<div class="table-container">
      <div class="recruiter remove-btn">
        <button type="button" class="delete-btn">Delete</button>
        <button type="button" class="archive-btn">Archive</button>
      </div>
      <table class="recruiter">
        <thead>
          <tr class="table-header">
            <th>Recruiter Name</th>
            <th>Phone</th>
            <th>E-mail</th>
            <th>Recruiter Note</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($recruiters as $recruiter): ?>
          <tr>
            <td> <a href= <?=URL."/recruiters/read/".$recruiter->id?>> <?=$recruiter->name ?> </a> </td>
            <td> <?=$recruiter->phone ?> </td>
            <td> <?=$recruiter->email ?> </td>
            <td> <?=$recruiter->note_id ?> </td>
          </tr>
          <?php endforeach; ?>

          <tr class="form-row">
            <td><input form="addRecruiter" type="text" name="recruiterName" placeholder='recruiter name'></td>
            <td><input form="addRecruiter" type="text" name='phone' placeholder='phone' ></td>
            <td><input form="addRecruiter" type="text" name='email' placeholder='email' ></td>
            <td><input form="addRecruiter" type="text" name='recruiterNote' placeholder='recruiter note'></td>
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

