var app = angular.module('app', []);

app.controller('PaymentFormCtrl', function($scope) {

  $scope.card = {};

  $scope.isVisa = function(){
    if($scope.card.number && $scope.card.number.charAt(0) == 4){
      return true;
    }else{
      return false;
    }
  };

  $scope.isMasterCard = function(){
    if($scope.card.number && $scope.card.number.charAt(0) == 5){
      return true;
    }else{
      return false;
    }
  };

  $scope.sendForm = function(){
    alert('Card number: ' + $scope.card.number + "\n" + 'Card holder: ' + $scope.card.holder + "\n" + 'Expiry date: ' + $scope.card.date + "\n" + 'Card CVV: ' + $scope.card.cvv );
  };

});

app.directive('cardNumber', function($browser){
  return {
    require: 'ngModel',
    link: function($scope, $element, $attrs, ngModelCtrl) {

      var formatter = function() {
        var chunks = $element.val().replace(/[^\d]+/g,'').match(/\d{1,4}/g);
        if(chunks){
          $element.val(chunks.join(' ').slice(0,19));
        }else{
          $element.val('');
        }
      };

      ngModelCtrl.$parsers.push(function(viewValue) {

        viewValue = viewValue.replace(/[^\d]+/g,'').slice(0,16);

        if(viewValue.charAt(0) != 4 && viewValue.charAt(0) != 5 && viewValue){
          ngModelCtrl.$setValidity('first_char', false);
        }else{
          ngModelCtrl.$setValidity('first_char', true);
        }

        if(viewValue.length < 16){
          ngModelCtrl.$setValidity('card_length', false);
        }else{
          ngModelCtrl.$setValidity('card_length', true);
        }

        return viewValue;
      });

      ngModelCtrl.$render = function() {
        formatter();
      };

      $element.bind('change', formatter);

      $element.bind('keydown', function(event) {
        var key = event.keyCode;
        if (key == 91 || (15 < key && key < 19) || (37 <= key && key <= 40)){
          return;
        }
        $browser.defer(formatter);
      });

      $element.bind('paste cut', function() {
        $browser.defer(formatter);
      });

    }
  };
});

app.directive('cardHolder', function($browser){
  return {
    require: 'ngModel',
    link: function($scope, $element, $attrs, ngModelCtrl) {

      var capitalize = function(inputValue) {

        if(inputValue == undefined) inputValue = '';

        if(inputValue.search(/[^a-zA-Z\s]+/) === -1){
          ngModelCtrl.$setValidity('only_latin', true);
        }else{
          ngModelCtrl.$setValidity('only_latin', false);
        }

        var capitalized = inputValue.toUpperCase();
        if(capitalized !== inputValue) {
          ngModelCtrl.$setViewValue(capitalized);
          ngModelCtrl.$render();
        }

        return capitalized;
      };

      ngModelCtrl.$parsers.push(capitalize);

      capitalize($scope[$attrs.ngModel]); 

    }
  };
});

app.directive('cardDate', function($browser){
  return {
    require: 'ngModel',
    link: function($scope, $element, $attrs, ngModelCtrl) {

      var formatter = function() {

        var chunks = $element.val().replace(/[^\d]+/g,'').match(/\d{1,2}/g);

        if(chunks){
          $element.val(chunks.join(' / ').slice(0,7));
        }else{
          $element.val('');
        }
      };

      ngModelCtrl.$parsers.push(function(viewValue) {

        viewValue = viewValue.replace(/[^\d]+/g,'');

        var chunks = viewValue.match(/\d{1,2}/g);

        if(chunks[0] > 12 || chunks[0] == '00'){
          ngModelCtrl.$setValidity('date', false);
        }else{
          ngModelCtrl.$setValidity('date', true);
        }

        if(viewValue.length < 4){
          ngModelCtrl.$setValidity('date_length', false);
        }else{
          ngModelCtrl.$setValidity('date_length', true);
        }

        return chunks.join(' / ').slice(0,7);
      });

      ngModelCtrl.$render = function() {
        formatter();
      };

      $element.bind('change', formatter);

      $element.bind('keydown', function(event) {

        var key = event.keyCode;
        if (key == 91 || (15 < key && key < 19) || (37 <= key && key <= 40)){
          return;
        }

        $browser.defer(formatter);
      });
      $element.bind('paste cut', function() {
        $browser.defer(formatter);
      });
    }
  };
});

app.directive('cardCvv', function($browser){
  return {
    require: 'ngModel',
    link: function($scope, $element, $attrs, ngModelCtrl) {

      var formatter = function() {
          $element.val($element.val().replace(/[^\d]+/g,'').slice(0,3));
      };

      ngModelCtrl.$parsers.push(function(viewValue) {
        viewValue = viewValue.replace(/[^\d]+/g,'');

        if(viewValue.length < 3){
          ngModelCtrl.$setValidity('cvv_length', false);
        }else{
          ngModelCtrl.$setValidity('cvv_length', true);
        }

        return viewValue.slice(0,3);
      });

      ngModelCtrl.$render = function() {
        formatter();
      };

      $element.bind('change', formatter);

      $element.bind('keydown', function(event) {
        var key = event.keyCode;
        if (key == 91 || (15 < key && key < 19) || (37 <= key && key <= 40)){
          return;
        }
        
        $browser.defer(formatter);
      });

      $element.bind('paste cut', function() {
        $browser.defer(formatter);
      });
    }
  };
});