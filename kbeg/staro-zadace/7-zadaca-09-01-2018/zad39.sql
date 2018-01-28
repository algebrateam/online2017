SELECT nazPred FROM pred
LEFT JOIN ispit ON pred.sifPred=ispit.sifPred
WHERE datIspit IS NULL ORDER BY nazPred;