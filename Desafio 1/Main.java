public class Main
{

public static void main(String[] args)
{
Integer n=0;
  try
  {
  n=Integer.parseInt(args[0]);
    if(n.intValue()<0)
    {
    throw new NumberFormatException();
    }
  }
  catch(NumberFormatException | ArrayIndexOutOfBoundsException ex)
  {
  System.out.println("O primeiro argumento deve ser um numero inteiro nao negativo.");
  System.exit(0);
  }
Integer max=Integer.MIN_VALUE;
Integer min=Integer.MAX_VALUE;
Integer x=0;

  for(int i=1;i<n+1;i++)
  {
    try
    {
    x=Integer.parseInt(args[i]);
    }
    catch(NumberFormatException | ArrayIndexOutOfBoundsException ex)
    {
    System.out.println("A sequencia esta incorreta. Faltam numeros ou alguma letra foi digitada");
    System.exit(0);
    }
    if(x<min)
    {
    min=x;
    }
    if(x>max)
    {
    max=x;
    }
  }
  if(n>1)
  {
  System.out.println("Maior número = "+max+" Menor número = "+min);
  }
  else if(n==1)
  {
  System.out.println("Digite algum numero na sequencia.");
  }
}

}
