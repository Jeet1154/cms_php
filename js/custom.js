console.log("This project is not completed under progress");
//delete category
$(".delete-category").on("click", function () {
  let data = $(this);
  let cid = $(this).data("cid");
  $.ajax({
    type: "POST",
    url: "http://localhost/academian/blogcms/cms_php/operations.php",
    data: {
      cid: cid,
      subject: "category-delete",
    },
    success: function (response) {
      // Handle success response from the server
      if (response == 1) {
        alert("Category deleted Successfully...");
        data.closest("tr").fadeOut();
      } else {
        alert("We can't delete category...");
      }
    },
    error: function (error) {
      // Handle error response from the server
      alert("Something went wrong...");
      console.error("Error deleting data:", error);
    },
  });
});

//access category details for update
$(".update-category").on("click", function () {
  let data = $(this);
  let updateCid = $(this).data("update_cid");
  $.ajax({
    type: "POST",
    url: "http://localhost/academian/blogcms/cms_php/operations.php",
    data: {
      updateCid: updateCid,
      subject: "category-data-access",
    },
    success: function (response) {
      // Handle success response from the server
      let categoryData = JSON.parse(response);
      $("#update_category_title").val(categoryData.category_title);
      $("#update_category_id").val(categoryData.category_id);
    },
    error: function (error) {
      // Handle error response from the server
      alert("Something went wrong...");
      console.error("Error deleting data:", error);
    },
  });
});

//update category details
// $("#update_category").on('submit',function(e){
//   e.preventDefault();
// })

//delete post
$(".delete-post-btn").on('click',function(){
  let data = $(this);
  let pid = $(this).data('pid');
  $.ajax({
    type: "POST",
    url: "http://localhost/academian/blogcms/cms_php/operations.php",
    data: {
      pid: pid,
      subject: "post-delete",
    },
    success: function (response) {
      // Handle success response from the server
      if (response == 1) {
        alert("Post deleted Successfully...");
        data.closest("tr").fadeOut();
      } else {
        alert("We can't delete Post...");
      }
    },
    error: function (error) {
      // Handle error response from the server
      alert("Something went wrong...");
      console.error("Error deleting data:", error);
    },
  });
})

//access post details for update
$(".edit-post-btn").on("click", function () {
  let data = $(this);
  let updatepid = $(this).data("pid");
  $.ajax({
    type: "POST",
    url: "http://localhost/academian/blogcms/cms_php/operations.php",
    data: {
      updatepid: updatepid,
      subject: "post-data-access",
    },
    success: function (response) {
      // Handle success response from the server
      let postData = JSON.parse(response);
      // console.log(postData)
      $("#update_post_id").val(postData.post_id);
      $("#update_post_category").val(postData.category_title);
      $("#update_post_title").val(postData.post_title);
      $("#update_post_desc").val(postData.post_desc);
    },
    error: function (error) {
      // Handle error response from the server
      alert("Something went wrong...");
      console.error("Error deleting data:", error);
    },
  });
});
