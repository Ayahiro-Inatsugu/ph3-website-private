document.querySelectorAll('#delete_btn').forEach(function(deleteBtn) {
  deleteBtn.addEventListener('click', function(e) {
    e.preventDefault();
    if (window.confirm('本当に削除しますか？')) {
      e.target.closest('.delete-form').submit();
    }
  });
});
