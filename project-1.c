// write a program to input roll number, name, marks, phone number of a student and display it.
#include<stdio.h>
int main()
{
int rollno,marks,phno;
char name[20];
printf("Enter roll number, name, marks, phone number of a student: ");
scanf("%d%s%d%d",&rollno,name,&marks,&phno);
printf("Roll number= %d\n\nName= %s\n\nMarks= %d\n\nPhone number= %d",rollno,name,marks,phno);
return 0;
}

// write a program to input roll number, name, marks of a student in 5 subjects using array and calculate total marks and average marks.
#include<stdio.h>
int main()
{
int rollno,marks[5],i,total=0;
float avg;
char name[20];
printf("Enter roll number, name, marks of a student in 5 subjects: ");
scanf("%d%s",&rollno,name);
for(i=0;i<5;i++)
{
scanf("%d",&marks[i]);
total=total+marks[i];
}
avg=total/5.0;
printf("Roll number= %d Name= %s Total marks= %d Average marks= %f",rollno,name,total,avg);
return 0;
}
// #include<stdio.h>
// int main()
// {
// int rollno,marks1,marks2,marks3,marks4,marks5,total;
// float avg;
// char name[20];
// printf("Enter roll number, name, marks of a student in 5 subjects: ");
// scanf("%d%s%d%d%d%d%d",&rollno,name,&marks1,&marks2,&marks3,&marks4,&marks5);
// total=marks1+marks2+marks3+marks4+marks5;
// avg=total/5;
// printf("Roll number= %d Name= %s Total marks= %d Average marks= %f",rollno,name,total,avg);
// return 0;
// }

// write a program to find square of a given number.
#include<stdio.h>
int main()
{
int n,square;
printf("Enter a number: ");
scanf("%d",&n);
square=n*n;
printf("Square of %d is %d",n,square);
return 0;
}

// write a program to find cube of a given number.
#include<stdio.h>
int main()
{
int n,cube;
printf("Enter a number: ");
scanf("%d",&n);
cube=n*n*n;
printf("Cube of %d is %d",n,cube);
return 0;
}

// write a program ot input radius of a circle and find its circumference and area by using pi as constant.
#include<stdio.h>
#define pi 3.14
int main()
{
float r,circumference,area;
printf("Enter radius of a circle: ");
scanf("%f",&r);
circumference=2*pi*r;
area=pi*r*r;
printf("Circumference of circle is %f and area of circle is %f",circumference,area);
return 0;
}

// write a program to input length and breadth of a rectangle and find its perimeter and area.
#include<stdio.h>
int main()
{
int l,b,perimeter,area;
printf("Enter length and breadth of a rectangle: ");
scanf("%d%d",&l,&b);
perimeter=2*(l+b);
area=l*b;
printf("Perimeter of rectangle is %d and area of rectangle is %d",perimeter,area);
return 0;
}

// write a program to input 4 integers and check if the equation a cube + b cube + c cube = d cube is true or false.
#include<stdio.h>
int main()
{
int a,b,c,d;
printf("Enter 4 integers: ");
scanf("%d%d%d%d",&a,&b,&c,&d);
if(a*a*a+b*b*b+c*c*c==d*d*d){
printf("The equation is true");
}
else{
printf("The equation is false");
}
return 0;
}

// write a program to input side of a square and find its area.
#include<stdio.h>
int main()
{
int side,area;
printf("Enter side of a square: ");
scanf("%d",&side);
area=side*side;
printf("Area of square is %d",area);
return 0;
}

// write a program to input principle, time and rate of interest and find simple interest.
#include<stdio.h>
int main()
{
int p,t,r,si;
printf("Enter principle, time and rate of interest: ");
scanf("%d%d%d",&p,&t,&r);
si=(p*t*r)/100;
printf("Simple interest is %d",si);
return 0;
}

// write a program to input a charachter and print its ASCII value.
#include<stdio.h>
int main()
{
char ch;
printf("Enter a charachter: ");
scanf("%c",&ch);
printf("ASCII value of %c is %d",ch,ch);
return 0;
}

// write a program to input the number in days and convert it into years, weeks and days.
#include<stdio.h>
int main()
{
int days,years,weeks;
printf("Enter number of days: ");
scanf("%d",&days);
years=days/365;
weeks=(days%365)/7;
days=days-((years*365)+(weeks*7));
printf("Years= %d Weeks= %d Days= %d",years,weeks,days);
return 0;
}

// write a program to input a number and print its equivalent in character code.
#include<stdio.h>
int main()
{
int n;
printf("Enter a number: ");
scanf("%d",&n);
printf("Equivalent character code is %c",n);    
return 0;
}

// write a program to input 2 numbers and print thier quotient and remainder.
#include<stdio.h>
int main()
{
int a,b,quotient,remainder;
printf("Enter 2 numbers: ");
scanf("%d%d",&a,&b);
quotient=a/b;
remainder=a%b;
printf("Quotient= %d Remainder= %d",quotient,remainder);
return 0;
}

// write a program to find out quotient and remainder without using % operator.
#include<stdio.h>
int main()
{
int a,b,quotient,remainder;
printf("Enter 2 numbers: ");
scanf("%d%d",&a,&b);
quotient=a/b;
remainder=a-(quotient*b);
printf("Quotient= %d Remainder= %d",quotient,remainder);
return 0;
}

// write a program to input 2 numbers and print the greater number.
#include<stdio.h>
int main()
{
int a,b;
printf("Enter 2 numbers: ");
scanf("%d%d",&a,&b);
if(a>b){
printf("%d is greater than %d",a,b);
}
else{
printf("%d is greater than %d",b,a);
}
return 0;
}

// write a program to input marks of a student and print the result (pass or fail).
#include<stdio.h>
int main()
{
int marks;
printf("Enter marks of a student: ");
scanf("%d",&marks);
if(marks>=40){
printf("Pass");
}
else{
printf("Fail");
}
return 0;
}

// write a program to find out area of triangle.
#include<stdio.h>
int main()
{
float b,h,area;
printf("Enter base and height of a triangle: ");
scanf("%f%f",&b,&h);
area=0.5*b*h;
printf("Area of triangle is %f",area);
return 0;
}

// write a program to find whether a number is even or odd.
#include<stdio.h>
int main()
{
int n;
printf("Enter a number: ");
scanf("%d",&n);
if(n%2==0){
printf("%d is even",n);
}
else{
printf("%d is odd",n);
}
return 0;
}

// write a program to input inches from the user and convert into yards. feets and inches.
#include<stdio.h>
int main()
{
int inches,yards,feets;
printf("Enter inches: ");
scanf("%d",&inches);
yards=inches/36;
feets=(inches%36)/12;
inches=inches-((yards*36)+(feets*12));
printf("Yards= %d Feets= %d Inches= %d",yards,feets,inches);
return 0;
}

// write a program to find out greatest of 3 numbers.
#include<stdio.h>
int main()
{
int a,b,c;
printf("Enter 3 numbers: ");
scanf("%d%d%d",&a,&b,&c);
if(a>b && a>c){
printf("%d is greatest",a);
}
else if(b>a && b>c){
printf("%d is greatest",b);
}
else{
printf("%d is greatest",c);
}
return 0;
}














