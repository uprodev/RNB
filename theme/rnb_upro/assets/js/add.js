jQuery(document).ready(function($) { 

  $("#three_questions_submit").click(function(){
    let industry = $("input[name='industry']:checked").val();
    if (industry) $('#current_industry').val(industry);
    let service = $("input[name='service']:checked").val();
    if (service) $('#current_service ').val(service);
    let objective = $("input[name='objective']:checked").val();
    if (objective) $('#current_objective').val(objective);
  });

  $('.btn-load_posts').on('click', function(e){
    e.preventDefault();
    let _this = $(this);

    let data = {
      'action': 'load_posts',
      'query': _this.attr('data-param-posts'),
      'page': this_page,
    }

    $.ajax({
      url: '/wp-admin/admin-ajax.php',
      data: data,
      type: 'POST',
      success:function(data){
        if (data) {
          $('.blog-list .container-fluid .row').append(data); 
          this_page++;                    
          if (this_page == _this.attr('data-max-pages')) {
            _this.remove();       
          }
        } else {                        
          _this.remove();  
        }
      }
    });
  });

  $('.btn-load_cases').on('click', function(e){
    e.preventDefault();
    let _this = $(this);

    let data = {
      'action': 'load_cases',
      'query': _this.attr('data-param-posts'),
      'page': this_page,
    }

    $.ajax({
      url: '/wp-admin/admin-ajax.php',
      data: data,
      type: 'POST',
      success:function(data){
        if (data) {
          $('.cases-list').append(data); 
          this_page++;                    
          if (this_page == _this.attr('data-max-pages')) {
            _this.remove();       
          }
        } else {                        
          _this.remove();  
        }
      }
    });
  });

});