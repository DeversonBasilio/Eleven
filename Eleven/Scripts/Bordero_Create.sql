USE [ElevenDB]
GO

/****** Object:  Table [dbo].[Bordero]    Script Date: 29/10/2016 21:00:15 ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

CREATE TABLE [dbo].[Bordero](
	[CODIGO] [numeric](18, 0) NOT NULL,
	[COD_Contratante] [numeric](18, 0) NOT NULL,
	[COD_Contratada] [numeric](18, 0) NOT NULL,
	[Total_Titulos] [money] NOT NULL,
	[Total_Despesas] [money] NOT NULL,
	[Total_Liquido] [money] NOT NULL,
 CONSTRAINT [PK_Bordero] PRIMARY KEY CLUSTERED 
(
	[CODIGO] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO

ALTER TABLE [dbo].[Bordero]  WITH CHECK ADD  CONSTRAINT [FK_Bordero_Empresas_Contratada] FOREIGN KEY([COD_Contratada])
REFERENCES [dbo].[Empresas] ([CODIGO])
GO

ALTER TABLE [dbo].[Bordero] CHECK CONSTRAINT [FK_Bordero_Empresas_Contratada]
GO

ALTER TABLE [dbo].[Bordero]  WITH CHECK ADD  CONSTRAINT [FK_Bordero_Empresas_Contratante] FOREIGN KEY([COD_Contratante])
REFERENCES [dbo].[Empresas] ([CODIGO])
GO

ALTER TABLE [dbo].[Bordero] CHECK CONSTRAINT [FK_Bordero_Empresas_Contratante]
GO

