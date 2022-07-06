#include<stdio.h>
int main()
{
    char file_name;
    int number_of_file, number_of_block;

printf("\n\n    Enter the number of file : ");
scanf("%d",&number_of_file);

for(int k=0;k<number_of_file;k++){
printf("\n    File Name: ");
    scanf("%s",&file_name);

    if(file_name=='A' || file_name=='B' || file_name=='C' || file_name=='a' || file_name=='b' || file_name=='c')
    {
        if(file_name=='A'){
            number_of_block = 4;
            int bif[4] = {15,10,8,11};
             printf("\n    Indexing file :");
            for(int l=0; l<4; l++){
                printf("%d,",bif[l]);
            }
            printf("\n");

        }else if(file_name=='a'){
        number_of_block = 4;
            int bif[4] = {15,10,8,11};
            printf("\n    Indexing file :");
            for(int l=0; l<4; l++){
                printf( "%d,",bif[l]);
            }
               printf("\n");
        }
            else if(file_name=='B'){
        number_of_block = 5;
            int bif[5] = {100,50,55,52,35};
             printf("\n    Indexing file :");
            for(int l=0; l<4; l++){
                printf("%d,",bif[l]);
            }
               printf("\n");

        }

        else if(file_name=='b'){
        number_of_block = 5;
            int bif[5] = {100,50,55,52,35};
             printf("\n    Indexing file :");
            for(int l=0; l<5; l++){
                printf("%d,",bif[l]);
            }
               printf("\n");

        }

        else if(file_name=='C'){
        number_of_block = 3;
            int bif[3] = {20,12,25};
             printf("\n    Indexing file :");
            for(int l=0; l<3; l++){
                printf("%d,",bif[l]);
            }
               printf("\n");

        }

        else if(file_name=='c'){
        number_of_block = 3;
            int bif[3] = {20,12,25};
             printf("\n    Indexing file :");
            for(int l=0; l<3; l++){
                printf("%d,",bif[l]);
            }
               printf("\n");

        }

    }
    else{
printf("\n\n    Error: File not found!! Please enter the file name between A,B or C");
    }
}
    printf("\n\n");
    return 0;
}
