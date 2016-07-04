import pandas as pd
import nltk
from textblob.classifiers import NaiveBayesClassifier

def do_smth(x):
    message=x.Comment[1:-1].replace("\\\\n"," ")
    tokens = nltk.word_tokenize(message)
    mes_annot=(tokens,str(x.Insult))
    return mes_annot

df=pd.read_csv("train.csv")
df2=df[["Insult","Comment"]]
df2["token"]=df2.apply(lambda x: do_smth(x), axis=1)

cl = NaiveBayesClassifier(list(df2.token.values))

print cl.classify("Fuck you, stupid moron!!!")
prob_dist = cl.prob_classify(nltk.word_tokenize("Fuck you, stupid moron!!!"))
print prob_dist.max()
print prob_dist.prob("0")
print prob_dist.prob("1")
