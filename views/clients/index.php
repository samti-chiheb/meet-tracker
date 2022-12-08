<h2>clients list</h2>
<form method="post" action="clients/add" id="addClient"></form>
<div class="table-container">
  <div class="client remove-btn">
    <button type="button" onclick="location.href='<?= URL?>'+deleteAction" class="delete-btn">Delete</button>
    <button type="button" onclick="location.href='<?= URL?>'+archiveAction" class="archive-btn">Archive</button>
  </div>
  <table class="client">
    <thead>
      <tr class="table-header">
        <th>Client name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Client description</th>
        <th>Recruiter</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($clients as $key=>$client): ?>
      <tr class="<?=$client->id?>">
        <form  method="post" action="clients/update/<?=$client->id?>" id="updateClient<?=$client->id?>"></form>
      </tr>
      <tr>
        <td> <a href= <?=URL."/clients/read/".$client->id?>> <?=$client->name ?> </a> </td>
        <td> <?=$client->email ?> </td>
        <td> <?=$client->phone ?> </td>
        <td> <?=$client->description ?> </td>
        <td> <?=$recruitersJoin[$key]->name;?></td>
      </tr>
      <?php endforeach ?>
    <!-- add rows  -->
      <!-- add form -->
      <tr class="add-form-row">
        <td><input form="addClient" type="text" name='client-name' placeholder='client name' required></td>
        <td><input form="addClient" type="email" name='email' placeholder='email' required></td>
        <td><input form="addClient" type="number" name='phone' placeholder='phone' required></td>
        <td><input form="addClient" type="text" name='client-descritption' placeholder='description'></td>
        <td class="select-recruiter">
          <select name="recruiter-id" form="addClient" required>
          <?php foreach($uniqueRecruitersJoin as $recruiter): ?>
            <option value=<?=$recruiter->id?>><?=$recruiter->name?></option>
          <?php endforeach ?>
          </select>
        </td>
      <!-- add buttons -->
      <tr class="add-form-btns" >
        <td colspan="5">
          <button type="button" class="action-btn add-new-btn active">
            <i class="bx bx-message-square-add" ></i>
            Add new
          </button>
          <button form="addClient" type="submit"  class="action-btn save-form-btn">
            <i class="bx bx-save"></i>
            Save
          </button>
          <button type="button" class="action-btn cancel-form-btn">
            <i class="bx bx-message-square-x" ></i>
            Cancel
          </button>
        </td>
      </tr>
    <!-- end add rows  -->
    </tbody>
  </table>
</div>

