// /**
//  * AdminLTE Demo Menu
//  * ------------------
//  * You should not use this file in production.
//  * This file is for demo purposes only.
//  */
// $(function () {
//   'use strict'
//
//
//   var info;
//   var tr;
//   var form = $("#form-info");
//   var modal = $("#modal");
//   /**
//    * List of all the available skins
//    *
//    * @type Array
//    */
//    var self = $(this);
//
//
//    self.modal.on('show.bs.modal', function (event) {
//      var button = $(event.relatedTarget); // Button that triggered the modal
//      self.info = eval(button.data('proyect'));
//      console.log(self.info);
//      var title = (info.title === 0)? button.data('title') : info.title;
//      var modal = $(this);
//      self.modal.find('.modal-body').html(' ');
//      self.modal.find('.proyect-name').text(title);
//      self.modal.find('.modal-body').append('<input type="hidden" name="dir" value="'+button.data('title')+'" />');
//      self.modal.find('.modal-body').append('<input type="hidden" name="proyect" value="'+button.data('proyect')+'" />');
//      $.each(info, function(name, val) {
//        var html = "<div class='form-group'> <label class='col-sm-2 control-label'>"+name.toUpperCase()+"</label> <div class='col-sm-10'><input class='form-control' name ='"+name+"' value='"+val+"' type='text'></div></div>";
//        self.modal.find('.modal-body').append(html);
//      })
//    });
//
//
//    self.form.submit(function(e) {
//        $.ajax({
//               type: "POST",
//               url: url,
//               data: self.form.serialize(), // serializes the form's elements.
//               success: function(data)
//               {
//                 var aux = eval(data['proyect']);
//                 delete data['proyect'];
//                 self.tr = $("."+aux);
//                 $.each(data, function(name, val) {
//                    self.tr.filter('.'+name).html(val);
//                 })
//                 self.modal.modal('hide');
//               }
//             });
//        e.preventDefault(); // avoid to execute the actual submit of the form.
//    });
// })
