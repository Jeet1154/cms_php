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
$("#update_category").on('submit',function(e){
  e.preventDefault();
})