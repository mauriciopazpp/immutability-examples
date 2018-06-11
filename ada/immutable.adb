With Ada.Text_IO; Use Ada.Text_IO;

Procedure Immutable is
	X: Integer:= 1; -- immutable
  	Sum: constant Integer:= 0;
begin
	Sum:= X + X;
end Immutable;
