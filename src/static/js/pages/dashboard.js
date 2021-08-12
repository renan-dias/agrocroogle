$(document).ready(function(){
  $('#add_button').click(function(){
      $('#course_form')[0].reset();
      $('.modal-title').text("Add Course Details");
      $('#action').val("Add");
      $('#operation').val("Add");
  });
  
  var dataTable = $('#course_table').DataTable({
      "paging":true,
      "processing":true,
      "serverSide":true,
      "order": [],
      "info":true,
      "ajax":{
          url:"fetch.php",
          type:"POST"
             },
      "columnDefs":[
          {
              "targets":[0,3,4],
              "orderable":false,
          },
      ],    
  });

  $(document).on('submit', '#course_form', function(event){
      event.preventDefault();
      var id = $('#id').val();
      var course = $('#course').val();
      var students = $('#students').val();
      
      if(course != '' && students != '')
      {
          $.ajax({
              url:"insert.php",
              method:'POST',
              data:new FormData(this),
              contentType:false,
              processData:false,
              success:function(data)
              {
                  $('#course_form')[0].reset();
                  $('#userModal').modal('hide');
                  dataTable.ajax.reload();
              }
          });
      }
      else
      {
          alert("Course Name, Number of students Fields are Required");
      }
  });
  
  $(document).on('click', '.update', function(){
      var course_id = $(this).attr("id");
      $.ajax({
          url:"fetch_single.php",
          method:"POST",
          data:{course_id:course_id},
          dataType:"json",
          success:function(data)
          {
              $('#userModal').modal('show');
              $('#id').val(data.id);
              $('#course').val(data.course);
              $('#students').val(data.students);
              $('.modal-title').text("Edit Course Details");
              $('#course_id').val(course_id);
              $('#action').val("Save");
              $('#operation').val("Edit");
          }
      })
  });
  
  $(document).on('click', '.delete', function(){
      var course_id = $(this).attr("id");
      if(confirm("Are you sure you want to delete this user?"))
      {
          $.ajax({
              url:"delete.php",
              method:"POST",
              data:{course_id:course_id},
              success:function(data)
              {
                  dataTable.ajax.reload();
              }
          });
      }
      else
      {
          return false;   
      }
  });
  
  
});