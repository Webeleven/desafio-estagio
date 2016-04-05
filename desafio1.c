#include <stdio.h>

int main()
{
   int N; 
   int x1, x2, x3, x4, x5, x6;

   // Inserir valor de N
   printf("O valor de N é:\n");
   scanf("%d", &N);
   scanf("%d %d %d %d %d %d", &x1, &x2, &x3, &x4, &x5, &x6);

   // If para valores menor que N
   if (x1<N && x1<x2 && x1<x3 && x1<x4 && x1<x5 && x1<x6)
   printf("O menor número = %d\n", x1);
   else
      if (x2<N && x2<x1 && x2<x3 && x2<x4 && x2<x5 && x2<x6)
      printf("O menor número = %d\n", x2);
      else
         if (x3<N && x3<x1 && x3<x2 && x3<x4 && x3<x5 && x3<x6)
         printf("O menor número = %d\n", x3);
         else
            if (x4<N && x4<x1 && x4<x2 && x4<x3 && x4<x5 && x4<x6)
            printf("O menor número = %d\n", x4);
            else
               if (x5<N && x5<x1 && x5<x2 && x5<x3 && x5<x4 && x5<x6)
               printf("O menor número = %d\n", x5);
               else
                  if (x6<N && x6<x1 && x6<x2 && x6<x3 && x6<x4 && x6<x5)
                  printf("O menor número = %d\n", x6);
                  
   // If para valores maior do que 6
   if (x1>N && x1>x2 && x1>x3 && x1>x4 && x1>x5 && x1>x6)
   printf("O maior número = %d\n", x1);
   else
      if (x2>N && x2>x1 && x2>x3 && x2>x4 && x2>x5 && x2>x6)
      printf("O maior número = %d\n", x2);
      else
         if (x3>N && x3>x1 && x3>x2 && x3>x4 && x3>x5 && x3>x6)
         printf("O maior número = %d\n", x3);
         else
            if (x4>N && x4>x1 && x4>x2 && x4>x3 && x4>x5 && x4>x6)
            printf("O maior número = %d\n", x4);
            else
               if (x5>N && x5>x1 && x5>x2 && x5>x3 && x5>x4 && x5>x6)
               printf("O maior número = %d\n", x5);
               else
                  if (x6>N && x6>x1 && x6>x2 && x6>x3 && x6>x4 && x6>x5)
                  printf("O maior número = %d\n", x6);        
            




   return 0;
}