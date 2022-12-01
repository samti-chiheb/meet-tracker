<h2>recruiters records</h2>
<form method="post" action="recruiters/add" id="addRecruiter"></form>
<?php
function str_contains($haystack, $needle) {
  return $needle !== '' && mb_strpos($haystack, $needle) !== false;
}
?>
<div class="table-container">
  <div class="recruiter remove-btn">
    <button type="button" onclick="location.href='<?= URL?>'+deleteAction" class="delete-btn" >Delete</button>
    <button type="button" onclick="location.href='<?= URL.'/recruiters/restore/'?>'+idSelectionStr" class="archive-btn" style="background-color: rgb(162, 248, 140);">Restore</button>
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
      <?php endforeach ?>
    </tbody>
  </table>
</div>