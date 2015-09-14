$(document).ready(function(){

	function defMatrix(r, c){ //r is number of rows; c is number of columns
		var matrix = [];
		for (var x = 0; x < r; x ++ ) {
			matrix[x] = [];
			for (var y = 0; y < c; y ++) {
				matrix[x][y] = [];
				matrix[x][y][0] = x * c + y; // currentRow  * RowSize + currentCol
				matrix[x][y][1] = false;
				console.log('test',matrix[x][y][1]);
			}
		}
		return matrix;
	};

	function prtMatrix(mtr) {
		// var obj = {};
		var row = mtr.length;
		var output = [];
		// console.log(row);
		var i = 0;
		for (var x = 0; x < row; x ++ ) {
			var col = mtr[x].length;
			for (var y = 0; y < col; y ++) {
				output[i] = mtr[x][y][0];

				i++;
			}
			output[i] = '<br/>';
			i++;
		}

		return output;
	};

	function circleMatrix(mtr) {
		var output = [];
		var i = 0;
		var rows = mtr.length;
		var cols = mtr[0].length;
		console.log(rows, cols);


		var crtCol = 0;
		var crtRow = 0;
		console.log(mtr[crtRow][crtCol][1]);

		while ((mtr[crtRow][crtCol][1] == false) && (mtr[crtRow][crtCol] !== undefined)){
			output[i] = mtr[crtRow][crtCol][0];
			console.log('output', output[i]);
			mtr[crtRow][crtCol][1] = true;
			if ((crtRow > 0) && (mtr[crtRow-1][crtCol][1] == false)) { //up
				crtRow --;
			}
			else if((crtCol < cols-1) && (mtr[crtRow][crtCol+1][1] == false)) { //right
				crtCol ++;
			} 
			else if ((crtRow < rows-1) && (mtr[crtRow+1][crtCol][1] == false)) { //down
				crtRow ++;
			} 
			else if ((crtCol > 0) && (mtr[crtRow][crtCol-1][1] == false)) { //left
				crtCol --;
			} 
			i++;
		}

		return output;
	}

	var matrix = defMatrix(3, 4);
	var printout = prtMatrix(matrix);
	var result = circleMatrix(matrix);

	$('p.matrix').html(printout);
	$('p.result').html(result);

});