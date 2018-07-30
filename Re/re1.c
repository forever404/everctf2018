#include <stdio.h>
#include <string.h>

int main(){
    int ans;
    char in[50];
    int t[50] = {101, 118, 101, 114, 99, 116, 102, 123, 55, 104, 49, 115, 95, 114, 69, 95, 105, 83, 95, 86, 51, 114, 57, 95, 56, 65, 37, 121, 125};
//int t[50] = { 334,351,334,347,332,349,335,356,288,337,282,348,328,347,302,328,338,316,328,319,284,347,290,328,289,298,270,354,358};
    printf("Your flag?\n");
    scanf("%s", in);
    int len = strlen(in);
    for(int i=0;i<len;i++){
        if((t[i]-233) != in[i]){
            printf("You should try harder.\n");
            return 0;
        }
    }
    printf("Congratz.\n");
    return 0;
}
