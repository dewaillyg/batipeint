type ServiceGridProps = {
    title: string,
    subtitle: string,
    link: string
}

export default function ServiceGrid({ title, subtitle, link }: ServiceGridProps) {

    return (
        <div className="flex items-center justify-between flex-col">
            <div className="w-full text-center">
                <div className={`${link} bg-center bg-cover w-full aspect-square`}></div>
                <h3 className="font-bold text-lg">{title}</h3>
            </div>
            <h5 className="text-center text-sm">{subtitle}</h5>
        </div>
    )
}