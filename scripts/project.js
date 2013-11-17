function ProjCntr($scope){
    $scope.message = 'Show More Info';
    var activeSection = 'sandbox'; // initial

    $scope.isJS = function(){
        return true;
    }

    $scope.switch = function(){
        if(activeSection == 'sandbox'){
            activeSection = 'meta';
            $scope.message = 'Show Sandbox';

        } else {
            activeSection = 'sandbox';
            $scope.message = 'Show More Info';
        }
    }

    $scope.isActive = function(section){
        if (section == activeSection){
            return true;
        } else {
            return false;
        }
    }
}