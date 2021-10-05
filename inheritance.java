class Publisher
{
int Sid;
char sname;
public void getdata(int p,char q)
{
Sid=p;
sname=q;
}
}
class book extends Publisher
{
int bid;
char bname,authorname;
public void getdata(int x, char y, char z)
{
bid=x;
bname=y;
authorname=z;
}
public void showdata()
{
System.out.println("%d"+sid+"\n%c"+sname+"\n%d"+bid+"\n%c"+bname+"\n%c"+authorname+);
}
}

class inheritance
{
public static void main(String args[])
{
book b= new book();
int a=Integer.parseInt(args[0]);
int b=Integer.parseInt(args[1]);
int c=Integer.parseInt(args[2]);
int d=Integer.parseInt(args[3]);
int e=Integer.parseInt(args[4]);
b.book(a,b,c,d,e);
}
}