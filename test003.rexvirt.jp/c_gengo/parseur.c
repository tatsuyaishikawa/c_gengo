 #include <stdio.h>
 #include <string.h>
 #include <stdlib.h>

 void recherche(char*,int);
 void stocker(char*); 
 void recherche_userid(char*,int);
 int duplica(char*);
 
 FILE *fd_store;

 int main(int argc,char **argv)
{
 FILE *fd_recup;
 int  read_target=0,i=0,j=0;
 char buf[200000],tmp[200000],tmp2[11],target_file[20],store_file[20];

 /*コマンドラインから入力する引数が不足している場合の処理*/
 if(argc<3){
  printf("プログラムの使用方法　　./parseur <読み取り対象のファイル> <パラメータの保存先のファイル> \n");
  exit(1);
 }
 /*二つのファイル名を含む変数を文字列変数にコピー*/
 strcpy(target_file,argv[1]);
 strcpy(store_file,argv[2]);
 /*読み取り対象のファイル*/
 fd_recup=fopen(target_file,"r");
 
 if(fd_recup==NULL){
  printf("recup error\n");
  exit(1);
 }
 /*パラメータの保存先ファイル*/
 fd_store=fopen(store_file,"a");

 if(fd_store==NULL){
  printf("recup error\n");
  exit(1);
 }
 /*fd_recupストリームからデータをすべてコピー*/
 while(fread(buf,1,1,fd_recup)!=0){
  strcat(tmp,buf);
  }

 /*コピーデータを最後まで読み取るループ　開始*/ 
 while(tmp[j]!='\0'){
  /* profile.php(11字)の分だけループして文字列を格納*/
  for(i=0;i<11;i++){
   tmp2[i]=tmp[i+j];
  }

  /*もしprofile.phpとバッファのデータが一致すればパラメータの取得処理へ移行する*/
  if(strncmp((char *)tmp2,"profile.php", 11) == 0){
   /*　疑問符(?マークのことです)は必要ないので、その分１つポインタを進め読み取り開始*/
   recherche(tmp,i+j+1);
   read_target++;
  }
  /*tmpバッファのポインタを一つ動かす*/
  j++;
 }
 /*コピーデータを最後まで読み取るループ　終了*/ 

 printf("このファイルは%d字含んでいます。\n",j); 
 printf("指定された文字列は%d個見つかりました。\n",read_target);
 fclose(fd_recup);
 fclose(fd_store);
 return 0;
}

 /*パラメータのnameを取得する関数*/
 void recherche(char *tmp,int point)
{
  int i=0;
  char buf[20];

  memset(buf,0,strlen(buf));
 /* = 符号まで移動する   */
  while(tmp[point]!='='){
   point++;
 }

 /* = 符号は保存しないので飛ばす*/
  point++;
 /* 残りのパラメータを " 符号に行き当たるまで取得、保存 */
 while(tmp[point]!='"'){
   buf[i]=tmp[point];
   if(tmp[point]=='='){
   /* ユーザＩＤは区別して取得*/
    recherche_userid(tmp,point+1);
   }
   i++;
   point++;
 }
 return;
}

 /*取得したデータをfd_storeに書き込む関数*/
 void stocker(char *buf)
{
 fwrite("\n",2,1,fd_store);
 fwrite(buf,(size_t)strlen(buf),1,fd_store);
 fwrite("\n",2,1,fd_store);
 return;  
} 

 /*ユーザＩＤを重複して保存するのを防止する関数*/
 int duplica(char *buf)
{
 char chaine[200]; 

 while(fgets(chaine,(size_t)strlen(buf),fd_store)!=NULL){
  if(buf==chaine)
   return 0;
 }
 return 1;
}

 /*ユーザＩＤをパラメータから取得する関数*/
 void recherche_userid(char *tmp,int point)
{
 int i=0;
 int buf[10];

 memset(buf,0,sizeof(buf));

 while(tmp[point]!='"'){
  buf[i]=tmp[point];
  i++;
  point++;
 }

 return;
}
