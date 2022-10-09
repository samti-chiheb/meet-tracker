
<h2>recruiters list</h2>

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
    <!-- <tr>
      <form action="" method="POST" class="table-form" ></form>
      <td> <input id="recruiterName" type="text"> </td>
      <td> <input id="recruiterPhone" type="text"> </td>
      <td> <input id="recruiterEmail" type="email"> </td>
      <td> <input id="recruiterNote_id" type="text"> </td>
      <td> <button class="table-form-add-btn" type="submit" value="add"></button> </td>
    </tr> -->

  </tbody>
</table>

