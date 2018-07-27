#include <stdio.h>

struct Student {
    char name[128];
    char s;
    int birth;
};
            
int main(int argc, char **argv) {
    struct Student student;
    student.s = 'c';
    printf("What's Your Birth?\n");
    fflush(stdout);
    scanf("%d", &student.birth);
    while (getchar() != '\n') ;
    if (student.birth == 1926) {
        printf("You Cannot Born In1926!\n");
        fflush(stdout);
        return 0;
    }
    printf("What's Your Name?\n");
    fflush(stdout);
    gets(student.name);
    printf("You Are Born In %d\n", student.birth);
    fflush(stdout);
    if (student.birth == 1926){
        printf("You Shall Have The Flag.\n");
        fflush(stdout)
        system("cat flag"); 
    }
    else {
        printf("You Are Naive.\n");
        printf("You Spend One Second Here.\n");
        fflush(stdout);
    }
    return 0;
}

