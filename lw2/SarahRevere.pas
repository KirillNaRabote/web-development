PROGRAM ValueOfVariables(INPUT, OUTPUT);
USES 
  DOS;
BEGIN{ValueOfVariables}
  WRITELN;
  WRITELN(GetEnv('QUERY_STRING'));
  IF GetEnv('QUERY_STRING') = 'lanterns=1'
  THEN
    WRITELN('The British are coming by sea')
  ELSE
    IF GetEnv('QUERY_STRING') = 'lanterns=2'
    THEN
      WRITELN('The British are coming by land')
    ELSE
      WRITELN('Sarah didn''t say')
END.{ValueOfVariables}
